<?php
//CareerModel.php
class CareerModel {
	
	public $model;
	
	//construct to load base Model class
	public function __construct() 
	{
		$this->model = new Model();
	}

	public function findAllCareers()
	{

		$careers = array(
			// array(
			// 	'id' => '1', 
			// 	'department' => 'Development',
			// 	'position' => 'API Platform Engineer',
			// 	'location' => 'Sofia',
			// ),
			// array(
			// 	'id' => '2', 
			// 	'department' => 'QA',
			// 	'position' => 'API Platform QA Engineer',
			// 	'location' => 'Sofia',
			// ),
			array(
				'id' => '2', 
				'department' => 'Development',
				'position' => 'Cloud-based Platform Engineer',
				'location' => 'Sofia',
			),
			array(
				'id' => '3', 
				'department' => 'Development',
				'position' => 'Cloud-based Network Engineer',
				'location' => 'Sofia',
			),
			array(
				'id' => '4', 
				'department' => 'Development',
				'position' => 'Platform Engineer',
				'location' => 'Plovdiv',
			),
			// array(
			// 	'id' => '5', 
			// 	'department' => 'QA',
			// 	'position' => 'Platform QA Engineer',
			// 	'location' => 'Plovdiv',
			// ),
		);
	
		return $careers;
	}
	
	public function findById($id)
	{

		$careers = array(
			'1' => array(
				'title' => 'API Platform Engineer',
				'overview' => 'As a member of our newly formed software API team, you will contribute in 
					the design, development, and support of existing platform\'s enterprise APIs.',
				'responsibilities' => array(
					 'Work directly with Product Managers, Software Architects, and Sustaining Engineers to resolve complex issues and provide technical action plans.',
					 'Full lifecycle application development.',
					 'Designing, coding, and debugging applications in various software languages.',
					 'Software analysis, code analysis, requirements analysis, software review, 
					 	identification of code metrics, system risk analysis, and software reliability analysis.',
				 	'Creation of Unit tests.',
				 	'Support, maintain, and document software functionality.',
				 	'Integrate software within existing systems.',
				),
				'qualifications' => array(
					'Software Engineering Skills:', 				
					array(
						'C/C++ or PHP (preferably);',
						'An understanding of higher-order programming. This will aid in the understanding of 
							some of the more advanced techniques in use;',
						'Secure software development skills is a plus.',
					),
					'Technologies:',
					array(
						'GNU/Linux, Virtualization;',
						'Google Protocol Buffers (this is a plus, but can be learned on the job in rather 
							short order);',
						'Version Control (git is a plus).',
					),
					'Knowledge of message queues (ZeroMQ is a nice plus).',
					'RESTful API principles and Experience in building out APIs as part of a new platform.',
					'Understanding of SOAP is a plus.',
					'High frequency message processing.',
					'Processing large data sets efficiently',
					'A strong respect for security.',
					'Able to learn additional programming languages as needed.',
				),
			),
			'2' => array(
				'title' => 'Cloud-based Platform Engineer',
				'overview' => 'As a member of our newly formed cloud development team, you will contribute in 
					the design, development, and support of cloud-based software projects.',
				'responsibilities' => array(
					 'Work directly with Product Managers, Software Architects, and Sustaining Engineers to resolve complex issues and provide technical action plans.',
					 'Full lifecycle application development.',
					 'Designing, coding, and debugging applications in various software languages.',
					 'Software analysis, code analysis, requirements analysis, software review, 
					 	identification of code metrics, system risk analysis, and software reliability analysis.',
				 	'Creation of Unit tests.',
				 	'Support, maintain, and document software functionality.',
				 	'Integrate software within existing systems.',
				),
				'qualifications' => array(
					'Desired technology stack background:', 				
					array(
						'Linux, Apache, MySQL, PHP;',
						'Symfony2 or other PHP5 framework;',
						'JavaScript;',
						'UML;',
						'PHP Unit.',
					),
					'Masters or Bachelors degree in Computer science.',
					'Previous software development experience.',
					'Good knowledge in REST and RESTful web service architectures.',
					'Previous experience in infrastructure/service/subscriber provisioning, ideally 
						provisioning of cloud based infrastructures, services and applications.',
					'Knowledge in SalesForce CRM and Zendesk APIs is a plus.',
					'Previous experience with IAAS cloud APIs of OpenStack, RackSpace, Vmware vCenter or AWS.',
					'Knowledge in SSO, SAML identity and service providers.',
					'Understanding of Design patterns and their usage.',
				),
			),
			'3' => array(
				'title' => 'Cloud-based Network Engineer',
				'overview' => 'As a member of our newly formed cloud development team, you will contribute in 
					the design, development, and support of cloud-based software projects.',
				'responsibilities' => array(
					'Work directly with Product Managers, Software Architects, and Sustaining Engineers to resolve complex issues and provide technical action plans.',
				 	'Requirements analysis, system risk analysis, and software reliability analysis.',
				 	'Support, maintain, and document software functionality.',
				 	'Implement network integration within various virtualizations and devices.',
				),
				'qualifications' => array(
					'Bachelors or Masters Degree in Computer science, electronics, telecommunications or similar.', 				
					'Good knowledge in Cloud technologies and more specifically in the interaction between Cloud Software/Hardware/Network ecosystems.',
					'In-depth technical skills in data-center technologies, infrastructure design & server infrastructure implementation.',
					'Proficiency in Storage/SAN/NAS system technologies.',
					'Proficiency in Linux, Linux kernel, Shell scripting, Linux user/network namespaces, 
						container technologies such as Doker, File systems (ext3, ext4, reiserfs, zfs, glusterfs).',
					'Hands on experience with OpenStack, VMWARE vCenter, RackSpace, Amazon AWS, Microsoft Azure, 
						IBM Softlayer or other cloud technologies.',
					'Knowledge of devOps tools, Automation Frameworks, and scripting languages (Expect, Chef, Puppet, Zookeper etc.)',
					'Good knowledge in network hardware, network protocols and VPN connections (IPSEC and SSL based VPNs).',
					'Ideally the candidates should have previous Cloud/Hosting Operations experience.',
				),
			),
			'4' => array(
				'title' => 'Platform Engineer',
				'overview' => 'As a member of our newly formed software Platform Engineering team, you will contribute in 
					the design, development, and support of xStats™ adapters and SDN as part of an enterprise platform.',
				'responsibilities' => array(
					 'Work directly with Product Managers, Software Architects, and Sustaining Engineers to resolve 
					 	complex issues and provide technical action plans.',
					 'Full lifecycle application development.',
					 'Designing, coding, and debugging applications in various software languages.',
					 'Software analysis, code analysis, requirements analysis, software review, 
					 	identification of code metrics, system risk analysis, and software reliability analysis.',
				 	'Creation of Unit tests.',
				 	'Support, maintain, and document software functionality.',
				 	'Integrate software within existing systems.',
				),
				'qualifications' => array(
					'Software Engineering Skills:', 				
					array(
						'PHP (preferably) or C/C++;',
						'Good understanding of OOP programming;',
						'Good understanding of MySQL specifics and data processing;',
						'Secure software development skills is a plus.',
					),
					'Technologies:',
					array(
						'GNU/Linux, Virtualization;',
						'Version Control (git is a plus).',
					),
					'Processing large data sets efficiently',
					'A strong respect for security.',
					'Able to learn additional programming languages as needed.',
				),
			),
			'5' => array(
				'title' => 'Platform QA Engineer',
				'overview' => 'As a member of our newly formed software Platform Engineering team, you will contribute testing 
					and assuring the quality of xStats™ adapters and SDN implementation as part of an enterprise platform.',
				'responsibilities' => array(
					'Work directly with Product Managers, support and developers to gain good understanding of the test basis.',
					'Design and implement test cases (manual/automated).',
					'Support, maintain and document test cases and test scenarios in Zephyr.',
					'Assemble and execute priority based test cycles in Zephyr.',
				 	'Report and manage well formatted defects in Jira.',
				 	'Provide standardized reports and time estimations to upper management when asked.',
				 	'Assemble regression suites both manual and automated (in the form of SOAP or REST requests).',
				 	'Formulate and carry out overall testing strategy.',
				 	'Communicate actively with other QA members to provide guidance or learn best practices.',
				 	'Provide immediate and relevant to quality of the product or process feedback.',
				 	'Suggests process improvements.',
				),
				'qualifications' => array(
					'BA or MS degree in IT, or other technical-oriented education.', 				
					'Previous work experience as a QA Tester.',
					'Experience in web applications testing.',
					'Experience in Linux and command shell.',
					'Experience in SQL and Relational Databases.',
					'Experience in using bug trackers like Jira and others is welcome.',
					'Good English reading and writing skills.',
					'Good understanding of test design techniques.',
					'Strong problem solving and analytical skills.',
					'Experience in automated testing of web services is a huge plus.',
					'Experience in networking (optional).',
					'Any certificates relevant to Software Testing, Programming or Networking are considered as plus.',
				),
			),
		);
	
		return $careers[$id];
	}
	
	/**
	 * validate method
	 * @param data
	 * @return bool
	 */
	public function validates($data) 
	{
		$result = true;
		//validates if class is a number
		if(array_key_exists('class', $data)) {
			if(!is_numeric($data['class'])) {
				$result = false;
			}
		} 
		return $result;
	}
	
}